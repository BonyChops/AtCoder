const lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
const [r, c] = lines[0].split(" ").map(v => parseInt(v));
const b = lines.slice(1).map(l => l.split(""));

function check(c, x, y) {
    b.forEach((tr, tx) => {
        tr.forEach((tc, ty) => {
            if (Math.abs(x - tx) + Math.abs(y - ty) <= c && b[tx][ty] === '#') {
                // console.log(Math.abs(x - tx) + Math.abs(y - ty), c);
                // console.log(tx, ty);
                b[tx][ty] = '.';
                // console.log(b);
            }
        })
    });
    b[x][y] = '.';
}

b.forEach((r, x) => {
    r.forEach((c, y) => {
        if (c !== '#' && c !== '.') {
            check(parseInt(c), x, y);
        }
    })
});
// console.log("---");
console.log(b.map(v => v.join("")).join("\n"));