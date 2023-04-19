const lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
const s = lines;
let rn = null, cn = null;
const alph = "abcdefgh";
for(const [key, v] of Object.entries(s)){
    const i = parseInt(key);
    const colN = v.indexOf("*");
    if(colN !== -1){
        rn = i;
        cn = colN;
        break;
    }
}
console.log(`${alph[cn]}${(7 - rn) + 1}`);