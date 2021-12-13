import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { DiccionarioComponent } from './diccionario.component';
import {MatInputModule} from '@angular/material/input';
import { MatCardModule } from '@angular/material/card';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatListModule} from '@angular/material/list';
import {MatButtonModule} from '@angular/material/button';
import { HttpClientModule } from '@angular/common/http';


@NgModule({
  declarations: [
    DiccionarioComponent
  ],
  imports: [
    CommonModule,
    MatInputModule,
    MatCardModule,
    MatFormFieldModule,
    MatListModule,
    MatButtonModule,
    HttpClientModule
  ],
  exports: [
    DiccionarioComponent
  ]
})
export class DiccionarioModule { }
