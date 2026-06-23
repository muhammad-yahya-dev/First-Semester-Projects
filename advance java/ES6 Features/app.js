class Mobile{
    constructor(brand,model,price,storage){
        this.brand=brand
        this.model=model
        this.price=price
        this.storage=storage
    }
}

let iphone = new Mobile("Apple", "iPhone 15", 150000, "256GB");

let samsung = new Mobile("Samsung", "S23 Ultra", 130000, "512GB");

let pixel = new Mobile("Google", "Pixel 8", 90000, "128GB");

let redmi = new Mobile("Xiaomi", "Note 13", 45000, "256GB");

let onePlus = new Mobile("OnePlus", "11R", 65000, "128GB");

let vivo = new Mobile("Vivo", "V29", 55000, "256GB");

console.log(iphone);
console.log(samsung);
console.log(pixel);

// console.log(iphone,samsung,pixel,redmi, onePlus,vivo);
