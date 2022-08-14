let num = 0;
document.getElementById('num').innerHTML = num;

function increment() {
    document.getElementById('num').innerHTML = num++;
}

function decrement() {
    document.getElementById('num').innerHTML = num--;
}