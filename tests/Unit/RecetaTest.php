<?php

namespace Tests\Unit;

use App\Models\Receta;
use PHPUnit\Framework\TestCase;

class RecetaTest extends TestCase
{
    public function test_se_puede_instanciar_una_receta(): void
    {
        $receta = new Receta([
            'titulo' => 'Queque de chocolate',
            'porciones' => 8,
            'instrucciones' => 'Mezclar los ingredientes y hornear.',
        ]);

        $this->assertInstanceOf(Receta::class, $receta);
        $this->assertEquals('Queque de chocolate', $receta->titulo);
        $this->assertEquals(8, $receta->porciones);
        $this->assertEquals(
            'Mezclar los ingredientes y hornear.',
            $receta->instrucciones
        );
    }
}
