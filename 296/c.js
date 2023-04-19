const lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
const [n, x] = lines[0].split(" ").map(v => parseInt(v));
const a = lines[1].split(" ").map(v => parseInt(v));
a.sort((a, b) => -a + b);
for (let i = 0; i < a.length - 1; i++) {
    for (let j = i; j < a.length; j++) {
        const r = a[i] - a[j] - x;
        if (r === 0) {
            console.log("Yes");
            return;
        }
        if (r > 0) {
            break;
        }
    }
}
console.log("No");