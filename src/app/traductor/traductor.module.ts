import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TraductorComponent } from './traductor.component';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { MatOptionModule } from '@angular/material/core';
import { MatSelectModule} from '@angular/material/select';
import { MatCardModule} from '@angular/material/card';
import { MatButtonModule } from '@angular/material/button';

@NgModule({
  declarations: [
    TraductorComponent,
    
  ],
  imports: [
    CommonModule,
    MatFormFieldModule,
    MatInputModule,
    MatOptionModule,
    MatSelectModule,
    MatCardModule,
    MatButtonModule
  ],
  exports: [
    TraductorComponent
  ]
})
export class TraductorModule { }
