package com.github.wolneiacordeiro.bichochicapi.controller;

import com.github.wolneiacordeiro.bichochicapi.Repository.ProdutoRepository;
import com.github.wolneiacordeiro.bichochicapi.entity.Produto;
import org.apache.commons.lang3.RandomStringUtils;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;
import java.io.InputStream;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;
import java.util.List;
import java.util.UUID;

@RestController
@RequestMapping("/api/produtos")
public class ProdutoController {

    @Autowired
    private ProdutoRepository produtoRepository;

    @GetMapping
    public List<Produto> getAllProdutos() {
        return produtoRepository.findAll();
    }

    @GetMapping("/{id}")
    public Produto getProdutoById(@PathVariable String id) {
        return produtoRepository.findById(id).orElse(null);
    }

    @PostMapping
    public Produto criarProduto(
            @RequestParam("nome") String nome,
            @RequestParam("preco") double preco,
            @RequestParam("descricao") String descricao,
            @RequestParam("tamanho") String tamanho,
            @RequestParam("quantidade") int quantidade,
            @RequestParam("especie") String especie,
            @RequestParam("categoria") String categoria,
            @RequestParam("imagem") MultipartFile imagem) throws IOException {

        Produto produto = new Produto();
        produto.setNome(nome);
        produto.setPreco(preco);
        produto.setDescricao(descricao);
        produto.setTamanho(tamanho);
        produto.setQuantidade(quantidade);
        produto.setEspecie(especie);
        produto.setCategoria(categoria);

        if (imagem != null && !imagem.isEmpty()) {
            String nomeArquivo = adicionarCaractereAleatorio(imagem.getOriginalFilename());
            String uploadDir = ".././bichochic-android/app/src/main/assets/images/";
            Path uploadPath = Paths.get(uploadDir);
            if (!Files.exists(uploadPath)) {
                Files.createDirectories(uploadPath);
            }
            try (InputStream inputStream = imagem.getInputStream()) {
                Path filePath = uploadPath.resolve(nomeArquivo);
                Files.copy(inputStream, filePath, StandardCopyOption.REPLACE_EXISTING);
            }
            produto.setImagem(nomeArquivo);
        }
        return produtoRepository.save(produto);
    }

    @PutMapping("/{id}")
    public Produto updateProduto(
            @PathVariable String id,
            @RequestParam("nome") String nome,
            @RequestParam("preco") double preco,
            @RequestParam("descricao") String descricao,
            @RequestParam("tamanho") String tamanho,
            @RequestParam("quantidade") int quantidade,
            @RequestParam("especie") String especie,
            @RequestParam("categoria") String categoria,
            @RequestParam(value = "imagem", required = false) MultipartFile imagem) throws IOException {

        Produto existingProduto = produtoRepository.findById(id).orElse(null);

        if (existingProduto != null) {
            existingProduto.setNome(nome);
            existingProduto.setPreco(preco);
            existingProduto.setDescricao(descricao);
            existingProduto.setTamanho(tamanho);
            existingProduto.setQuantidade(quantidade);
            existingProduto.setEspecie(especie);
            existingProduto.setCategoria(categoria);

            if (imagem != null && !imagem.isEmpty()) {
                if (existingProduto.getImagem() != null) {
                    Path oldFilePath = Paths.get(".././bichochic-android/app/src/main/assets/images/", existingProduto.getImagem());
                    Files.deleteIfExists(oldFilePath);
                }

                String nomeArquivo = adicionarCaractereAleatorio(imagem.getOriginalFilename());
                try (InputStream inputStream = imagem.getInputStream()) {
                    Path filePath = Paths.get(".././bichochic-android/app/src/main/assets/images/", nomeArquivo);
                    Files.copy(inputStream, filePath, StandardCopyOption.REPLACE_EXISTING);
                }

                existingProduto.setImagem(nomeArquivo);
            }

            return produtoRepository.save(existingProduto);
        } else {
            return null;
        }
    }


    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProduto(@PathVariable String id) {
        Produto existingProduto = produtoRepository.findById(id).orElse(null);
        if (existingProduto != null) {
            produtoRepository.deleteById(id);
            if (existingProduto.getImagem() != null) {
                Path filePath = Paths.get(".././bichochic-android/app/src/main/assets/images/", existingProduto.getImagem());
                try {
                    Files.deleteIfExists(filePath);
                } catch (IOException e) {
                }
            }
            return ResponseEntity.noContent().build();
        } else {
            return ResponseEntity.notFound().build();
        }
    }

    private String adicionarCaractereAleatorio(String originalFilename) {
        String uuidPart = UUID.randomUUID().toString();
        String restanteDoNome = originalFilename.substring(originalFilename.indexOf("_") + 1);
        String caractereAleatorio = RandomStringUtils.randomAlphabetic(1);
        return caractereAleatorio + uuidPart + restanteDoNome;
    }
}

