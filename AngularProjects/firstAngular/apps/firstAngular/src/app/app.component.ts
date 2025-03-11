import { Component } from '@angular/core';
import { SquareComponent } from "./square/square.component";
import { BoardComponent } from "./board/board.component";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss'],
  imports: [BoardComponent],
})
export class AppComponent {
  title = 'firstAngular';
}