let input = require('fs').readFileSync('/dev/stdin', 'utf8');
let data = input.split('\n');
let n = parseInt(data[0].split(' ')[0]);
let x = parseInt(data[0].split(' ')[1]);
let s = new Set();
data[1].split(' ').forEach(function(ai) {
    s.add(parseInt(ai));
});

for(let a of s) {
    if(s.has(a + x)) {
        console.log("Yes");
        return;
    }
}
console.log("No");
