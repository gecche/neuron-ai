<?php

namespace NeuronAI\Providers;

trait AIProviderTrait
{
    /*
     * The currently setted model.
     */
    public function getModel(): string|null {
        return $this->model ?? null;
    }
}
