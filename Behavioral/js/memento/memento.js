class Memento {
  constructor(state) {
    this.state = state;
  }

  getState() {
    return this.state;
  }
}

class Originator {
  constructor() {
    this.state = null;
  }

  add(state) {
    this.state = state;
  }

  save() {
    return new Memento(this.state);
  }

  restore(memento) {
    this.state = memento.getState();
  }
}

class CareTaker {
  constructor(originator) {
    this.mementos = [];
    this.originator = originator;
  }

  add(state) {
    this.originator.add(state);
  }
  save() {
    this.mementos.push(this.originator.save());
  }

  undo() {
    const memento = this.mementos.pop();
    this.originator.restore(memento);
  }
}

const originator = new Originator();

const caretaker = new CareTaker(originator);

// caretaker.add(5);
// caretaker.add(10);

// console.log(originator.state);

caretaker.add(5);
caretaker.save()

caretaker.add(10)
caretaker.save()

caretaker.undo()

caretaker.add(15)
// caretaker.add(20)
caretaker.save()

console.log(caretaker.mementos);
