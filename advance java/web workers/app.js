let heading1=document.getElementById("head-1")
let heading2=document.getElementById("head-2")

function hi(){
    heading1.innerHTML +="hi";
}

function cal(){
    console.log("hi");
    let worker=new Worker("worker.js");

    worker.postMessage("start the calculation");

    worker.onmessage=(e)=>{
        console.log(e);
        heading2.innerHTML=e.data;
    }
}