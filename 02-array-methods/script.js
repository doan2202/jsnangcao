// 2.1 array basic
let x;

const arr = [28, 38, 44, 29, 109];

// push() - Push a value on to the end of the array
arr.push(100);

// pop() - Take the last value off
arr.pop();

// unshift() - Add a value to the beginning of the array
arr.unshift(99);

// shift() - Remove first value
arr.shift();

// reverse() - Reverse an array
arr.reverse();

// includes() - Check to see if something is in the array
x = arr.includes(445);

// indexOf() - Return the index of the first match
x = arr.indexOf(28);

// slice() returns selected elements in an array, as a new array. Slice takes in the index of the first element and the index of the last element to be included in the new array.
x = arr.slice(1, 4);

// splice() works like slice() except it takes the index of the first element and the number of elements after that as a second argument. it also mutates the original array where slice() does not
x = arr.splice(1, 4);


// array spread
const obj1 = { a: 1, b: 2 };
const obj2 = { c: 3, d: 4 };

// Spread operator
const obj3 = { ...obj1, ...obj2 };
// Same as using ...
const obj4 = Object.assign({}, obj1, obj2);
console.log(obj3);
console.log(obj4);

// Array of objects
const todos = [
    { id: 1, name: 'Buy Milk' },
    { id: 2, name: 'Pickup kids from school' },
    { id: 3, name: 'Take out trash' },
  ];
  
  y = todos[0].name;

  console.log(y);
  // Get array of object keys
// x = Object.keys(todos);

// Get length of an object
// x = Object.keys(todos).length;

// Get array of object values
// x = Object.values(todos);

// Get array of object key/value pairs
x = Object.entries(todos);


  console.log(x);


