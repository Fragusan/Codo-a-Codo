

const variables = {
    precioUnitario: 0,
    total:0,
    categoria:"",
    cantidad : 0,
    ahorro: 0,
    cDescuento: ""
}

const provisorio=()=>{
    variables.total= variables.precioUnitario * variables.cantidad;
    document.getElementById("descuento").innerHTML="$" + variables.total
}

const valorTicket= (n=100)=>{
    variables.precioUnitario=(n)
    document.getElementById("valorTicket").innerHTML=n
    console.log("Cosa de la inflación")
}

const cantidades=(value)=> { variables.cantidad=Number(value) }

const categorias=(v)=> {variables.categoria=v }

const total=(v=0)=>{ 
    let descuento=0;
    //let total=variables.precioUnitario * variables.cantidad;
    if(v == 1) {
        descuento= variables.total  * 0.8;
        document.getElementById("ahorro").innerHTML=`Ténes un ahorro de $${descuento}`
    }
    if(v == 2) {
        descuento= Number(variables.total)/2
        document.getElementById("ahorro").innerHTML=`Ténes un ahorro de $${descuento}`
    }
    if(v == 3) {
        descuento= variables.total * 0.15;
        document.getElementById("ahorro").innerHTML=`Ténes un ahorro de $${descuento}`
    }
    if(v == 4) {document.getElementById("ahorro").innerHTML=``}

    variables.ahorro=descuento
    variables.cDescuento=variables.total - descuento
    
    document.getElementById("precio").innerHTML="$" + variables.total
    document.getElementById("descuento").innerHTML="$" + (variables.total - descuento)

    if(v == 4){ document.getElementById("precio").innerHTML=""}
}

const cleaner=()=>{
    document.getElementById("ahorro").innerHTML="";
    document.getElementById("precio").innerHTML="";
    document.getElementById("descuento").innerHTML="";
}


valorTicket()