<?php

interface iField {
    public function Label();
    public function Name();
    public function Validate();
    public function Value();
    public function Render();
    public function Required();
    public function getErrors();
}
