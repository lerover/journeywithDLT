//Get UI
const inputs = document.querySelectorAll("input");
// console.log(inputs);
let datas = [];

inputs.forEach(function (input) {
  // console.log(input);

  input.addEventListener("keyup", function () {
    console.log(this.value);

    datas.push({
      digit: inputs[0],
      name: inputs[1],
      exp: inputs[2],
      ccv: inputs[3],
    });

    console.log(datas[datas.length - 1]);
  });
});
