<?php

namespace Code;

use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{
    private $produto;

    // Roda antes de cada teste da classe
    public function setUp(): void
    {
        $this->produto = new Produto();
    }

    // // Chamado uma vez, antes dos testes serem executados, no caso pode ser usado para acessar o banco pois executa só uma vez
    // public static function setUpBeforeClass(): void
    // {
    //     print __METHOD__;
    // }

    // // Chamado uma vez, depois dos testes serem executados, no caso pode ser usado para acessar o banco pois executa só uma vez
    // public static function tearDownAfterClass(): void
    // {
    //     print __METHOD__;
    // }

    public function testSeONomeDoProdutoESetadoCorretamente()
    {
        $produto = $this->produto;
        $produto->setName('Produto 1');

        $this->assertEquals('Produto 1', $produto->getName(), 'Valores não são iguais');
    }

    public function testSeOPrecoDoProdutoESetadoCorretamente()
    {
        $produto = $this->produto;
        $produto->setPrice('19.99');

        $this->assertEquals('19.99', $produto->getPrice(), 'Valores não são iguais');
    }

    public function testSeOSlugDoProdutoESetadoCorretamente()
    {
        $produto = $this->produto;
        $produto->setSlug('produto-1');

        $this->assertEquals('produto-1', $produto->getSlug(), 'Valores não são iguais');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Parâmetro inválido, informe um slug
     */
    public function testSeSetSlugLancaExceptionQuandoNaoInformado()
    {
        // Essas exception tem que ficar acima da chamada de setSlug
        $this->expectException('\InvalidArgumentException');
        $this->expectExceptionMessage('Parâmetro inválido, informe um slug');

        $product = $this->produto;
        $product->setSlug('');
    }
}
