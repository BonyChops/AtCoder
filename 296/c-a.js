const lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
const [n, x] = lines[0].split(" ").map(v => parseInt(v));
const a = lines[1].split(" ").map(v => parseInt(v));
a.sort((a, b) => a - b);
let i = 0;
for (let j = 0; j < a.length; j++) {
    while (i < n && a[i] - a[j] < x) i++;
    if(i < n && a[i] - a[j] === x){
        console.log("Yes");
        return;
    }
}
console.log("No");