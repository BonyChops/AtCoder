const lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
const n = parseInt(lines[0]);
const w = lines[1].split(" ");
if (w.some(v => ["and", "not", "that", "the", "you"].includes(v))){
    console.log("Yes");
}else{
    console.log("No");
}