import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { NxWelcomeComponent } from './nx-welcome.component';
import { SquareComponent } from './square/square.component';
import { BoardComponent } from './board/board.component';

@NgModule({
    imports: [
        BrowserModule,
        RouterModule,
        NxWelcomeComponent,
        SquareComponent,
        BoardComponent
      ],
      providers: [],
})
export class AppModule { }