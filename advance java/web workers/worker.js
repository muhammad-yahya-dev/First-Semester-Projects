onmessage = (e)=>{
    console.log(e);

    let result =0;
    for (let i = 1; i < 54765467; i++){
        result += i;
    }
    postMessage(result);
}