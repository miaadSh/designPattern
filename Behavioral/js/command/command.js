class CommandManager {
  constructor() {
    this.actions = [];
    this.currentValue = 0;
    this.undidCommands = [];
  }

  execute(command) {
    this.actions.push(command);
    this.currentValue = command.execute(this.currentValue, command.value);
  }

  undo() {
    const command = this.actions.pop();
    this.undidCommands.push(command);
    this.currentValue = command.undo(this.currentValue, command.value);
  }

  redo() {
    const undidCommand = this.undidCommands.pop();
    this.currentValue = undidCommand.execute(
      this.currentValue,
      undidCommand.value
    );
  }
}

class Command {
  constructor(execute, undo, value) {
    this.execute = execute;
    this.value = value;
    this.undo = undo;
  }
}

function add(x, y) {
  return x + y;
}
function sub(x, y) {
  return x - y;
}
function mul(x, y) {
  return x * y;
}
function div(x, y) {
  return x / y;
}

const manager = new CommandManager();

manager.execute(new Command(add, sub, 50));
manager.execute(new Command(add, sub, 20));
manager.undo();
manager.redo();
manager.execute(new Command(mul, div, 10));
manager.execute(new Command(div, mul, 7));
manager.undo();
manager.redo();

console.log(manager.currentValue);
