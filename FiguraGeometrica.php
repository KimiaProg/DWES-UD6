<?php

abstract class FiguraGeometrica
{
    private string $color;
    private string $tipo;

    abstract public function area();
    abstract public function dibuja();
}
