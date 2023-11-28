
<?php


use App\Http\Controllers\ProductoController;

class ProductsController 
{
    public function testObtenerPrecioConDescuento()
    {
        $controller = new ProductoController();
        $result = $controller->obtenerPrecioConDescuento(100, 20);

        $this->assertEquals(80, $result);
        $this->assertIsFloat($result);
        $this->assertLessThanOrEqual(100, $result);
    }
    
    public function testValidarCorreoElectronico()
    {
        $controller = new ProductoController();
        $result = $controller->validarCorreoElectronico('correo@example.com');

        $this->assertTrue($result);
        $this->assertIsBool($result);
    }

    public function testContarElementosArray()
    {
        $controller = new ProductoController();
        $result = $controller->contarElementosArray([1, 2, 3, 4, 5]);

        $this->assertEquals(5, $result);
        $this->assertIsInt($result);
    }

    public function testGenerarCadenaAleatoria()
    {
        $controller = new ProductoController();
        $result = $controller->generarCadenaAleatoria(10);

        $this->assertIsString($result);
        $this->assertEquals(10, strlen($result));
    }

    public function testInvertirCadena()
    {
        $controller = new ProductoController();
        $result = $controller->invertirCadena('Hola Mundo');

        $this->assertEquals('odnuM aloH', $result);
        $this->assertIsString($result);
    }
}
