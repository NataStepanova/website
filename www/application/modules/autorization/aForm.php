<?php


abstract class aForm{

    abstract public function Create();//построение формы

    abstract public function validateCustom();//проверка текущей формы

    abstract public function Submit();

}