//6 задание (25 минут)

function func6(num) {
  let arr = [];
  let oneRow = [];

  for (let i = 1; i <= num; i++) {
    for (let j = 1; j <= num; j++) {
      oneRow.push(j*i);      
    }
    arr.push(oneRow); 
    oneRow = [];
  }
  for (let g = 0; g <= num; g++) {
    for (let k = arr.length - 1; k >= 1; k--) {
      let n = String(arr[k][g]).length;
      let m = String(arr[k - 1][g]).length;
      if (n > m) {
        arr[k - 1][g] = ' ' + arr[k - 1][g];
      }
    }
  }
  for (let l = 0; l < arr.length; l++ ) {
    let str = '';
    let strRow = arr[l].join(' ');
    if (l == 0) {
      str = ' ' + ' ' + strRow;
      console.log(str);
    } else {
      str = l + ' ' + strRow;
      console.log(str);
    }
  }
}

