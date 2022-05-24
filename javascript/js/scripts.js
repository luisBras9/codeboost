//console.log("Ola Javascript!");

//alert("Alert do Javascript!");

/* 
  Variáveis
  - Responsaveis por guardar dados na memoria
*/

// Declaração de variaveis
var marcaCarro = "Chevrolet";
var modeloCarro = "Onix";
var corCarro = "Preto";
var anoCarro = "2018";
var precoCarro = 40.0;
var carroVendido = false;

// console.log(marcaCarro + " - " + modeloCarro);

/* 
  Tipos de Variáveis
  - var
  - let
  - const
*/

// var (Pode ser alterada após execução)
var nome = "Matheus";
var nome = "Matheus Costa";

//  const e let (Não podem ser alterada!!!)
const sobrenome = "Costa";

/* 
  Operações 
*/

let valor01 = 5;
let valor02 = 15;

let resultado = valor01 + valor02;

console.log(resultado);

/* 
  Tipos de Dados
*/

var marcaCarro = "Gol" // String
var anoCarro = 2021 // Number
var carroVendido = true // Boolean
var qtdRodas // Undefined
var carroAutomatico = null // Null
var simbolo = Symbol() // Symbol
var objetoCarro = {} // Object

var propriedadesCarro = [
  {
    marca: "Chevrolet",
    modelo: "Onix" ,
    cor: "Preto"
  },
  {
    marca: "Volkswagem",
    modelo: "Gol" ,
    cor: "Prata"
  }
];

// Acessando a propriedade do objeto/array
console.log(propriedadesCarro[0].marca);

// Typeof - função para identificar o tipo de dado da variavel
console.log(typeof propriedadesCarro);

// Length - função para somar o total
console.log(propriedadesCarro.length);

// Template Strings (concatenação de variáveis)
console.log(`Marca do carro: ${marcaCarro} - Ano de fabricação: ${anoCarro}`)