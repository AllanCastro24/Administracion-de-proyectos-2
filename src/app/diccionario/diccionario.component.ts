import { Component, OnInit } from '@angular/core';
import { Traduccion } from '../traductor/traduccion';
import { ApiService } from '../idiomas/services/api-service';
import { FormControl } from '@angular/forms';

@Component({
  selector: 'app-diccionario',
  templateUrl: './diccionario.component.html',
  styleUrls: ['./diccionario.component.scss']
})
export class DiccionarioComponent implements OnInit {
  filtro=new FormControl();
  Traduccion: Traduccion[] = [];
  Auxiliar: Traduccion[] = [];
  constructor(public apiService:ApiService) { }

  ngOnInit(): void {
    this.getDiccionario();
  }
  
  getDiccionario():void{
    this.apiService.getDiccionario().subscribe(response=>{
      const { Traduccion } = response
      this.Traduccion = Traduccion;
      this.Auxiliar = Traduccion;
      
    })
  }
  filtrado(){
    if(this.filtro.value != null || this.filtro.value != ""){
      console.log(this.filtro.value);
      this.Auxiliar=[];
      this.Traduccion.filter((u)=>{if(u.dialecto==this.filtro.value){this.Auxiliar.push(u)}});
      console.log(this.Auxiliar);
    }else{
      this.Auxiliar = this.Traduccion
    }
    
  }
}
