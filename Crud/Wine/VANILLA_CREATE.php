<?php 

namespace PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\Wine;
    
/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour - PHPCRUD (Plugin) v1.3.0.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.3.0.0 free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHPCrud Vanilla
 * @package    PHPCrud Vanilla Plugin of PHP Wine extend optimizer to crud features
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.3.0.0 support PHPWine v1.2.0.9
 * @since     04.13.2022
 * 
 * 
 */ 

 
class VANILLA_CREATE Extends \PHPWineVanillaFlavour\Plugins\PHPCrud\Crud\Wine\Tags
{

    public function __construct() {
            
       self::getElement();
    
    }
    
    static private function getElement() : void { require_once (dirname(__FILE__) . DIRECTORY_SEPARATOR . self::$file_name['VANILLA_WINECREATE']); }
    
}
    
    

