console.log('weshmec');

function fizzbuzz() {
    for ( let i=1; i<=100; i++){
        let output;
        // multipple de 3
        if(i % 3 === 0) output = " Fizz ";
        // multipple de 5
        if(i % 5 === 0) output = " Buzz ";
        // multipple de 15
        if(i % 15 === 0) output = " FizzBuzz ";

        console.log(output ? output : i);
    }
}

fizzbuzz();