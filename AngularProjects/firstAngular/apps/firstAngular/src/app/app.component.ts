import { Component } from '@angular/core';
import { SquareComponent } from "./square/square.component";
import { BoardComponent } from "./board/board.component";
import { HeaderFooterComponent } from "./header-footer/header-footer.component";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss'],
  imports: [BoardComponent, HeaderFooterComponent],
})
export class AppComponent {
  title = 'firstAngular';
}