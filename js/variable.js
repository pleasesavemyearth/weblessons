// 1. use strict mode for valid Javascript
'use strict';
// 2. variable
// let (added in ES6)
let globalName = 'global name';
{
let name = 'swcodingschool';
console.log(name);
name = 'hello';
console.log(name);
console.log(globalName);
}
console.log(name);
console.log(globalName);
// block scope {  }를 이용, {} 안에 코드를 작성하게 될 경우
// {} 밖에서는 더 이상 변수를 인식할 수 없음
// 반대로 {} 밖에 변수를 선언하면 어디서나 사용 가능. global scope이라고 함
// 

// var (don't ever use this!!. ES6 이전 사용법)
// var 는 사용하기도 전에 사용 가능 ===>  hoisting
// var hoisting( move declaration from bottom to top)
age = 4;
var age;

// var는 block scope가 없다.
//3. constants  : 
// favor immutable data type always for a few reasons:
// - security
// - thread safety
// - reduce human mistakes
// const maxNumber = 1 

// 4. variable types
// primitive, single type : number, string, boolean, null, undefined, symbol
// object type : object, box container
// function, first-class function
