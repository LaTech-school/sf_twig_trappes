export class Prompt {

    name;

    question()
    {
        this.name = prompt("Quel est votre nom ?");
        this.response();
    }

    response()
    {
        alert(this.name);
    }
}