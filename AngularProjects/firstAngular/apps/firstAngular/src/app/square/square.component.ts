import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-square',
  template: `
    <button>{{ value }}</button>
  `,
   styles: [`
    @import url('https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Doto:wght@100..900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"');
    button { 
      width: 100%; 
      height: 100%; 
      font-size: 5em !important; 
      font-family: Montserrat Alternates, sans-serif;
      font-weight: 6  00;
      color:white;
      // border: 3px solid rgb(175, 174, 172);
      border:none;
      background:transparent;
      // background:rgb(40, 37, 32);
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
  