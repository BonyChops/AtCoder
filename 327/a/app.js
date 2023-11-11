const lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
const [N] = lines[0].split(" ");
const [S] = lines[1].split(" ");
const ss = S.split("");
for (const [is, c] of Object.entries(ss)) {
  const i = Number(is);
  if (i === 0) {
    continue;
  }

  if ((c === "a" && ss[i - 1] === "b") || (c === "b" && ss[i - 1] === "a")) {
    console.log("Yes");
    return;
  }
}
console.log("No");
