class Student{
  constructor(name,id){
  this.name = name;
  this.id = id;
  }
  set studentName(name){
    this.name = name;
  }
  get info(){
    console.log(`${this.name}` +` ${this.id}`);;
   
  }
}

var obj = new Student('Mamun',12);
console.log(obj);

console.log(obj.studentName='hi');
obj.info;