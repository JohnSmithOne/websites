import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-square',
  template: `
    <button>{{ value }}</button>
  `,
   styles: [`
    @import url('https://fonts.googleapis.com/css2?family=Mogra&display=swap');
    button { 
      width: 100%; 
      height: 100%; 
      font-size: 5em !important; 
      font-family: 'Mogra', cursive;
      color:white;

      border: 3px solid rgb(93, 79, 48);
  
      background:rgb(40, 37, 32);
    }

    button:hover {
      transform: scale(1.05);
      z-index: 1;
      transition: 0.2s;
    }
  `]
})
export class SquareComponent {
  @Input() value:string;
}
  