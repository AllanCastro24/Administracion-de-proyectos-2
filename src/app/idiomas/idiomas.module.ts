import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IdiomasComponent } from './idiomas.component';
import {MatButtonModule} from '@angular/material/button';
import { MatDividerModule } from '@angular/material/divider';
import {MatCardModule } from '@angular/material/card';
import {MatFormFieldModule} from '@angular/material/form-field';
@NgModule({
  declarations: [
    IdiomasComponent
  ],
  imports: [
    CommonModule,
    MatButtonModule,
    MatDividerModule,
    MatCardModule,
    MatFormFieldModule
  ],
  exports: [
    IdiomasComponent
  ]
})
export class IdiomasModule { }
