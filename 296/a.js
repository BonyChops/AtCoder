const lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
const n = parseInt(lines[0]);
const s = (lines[1]);
for(let i = 0; i < s.length - 1; i++){
    if(s[i] === s[i + 1]){
        console.log("No");
        process.exit(0);
    }
}
console.log("Yes");