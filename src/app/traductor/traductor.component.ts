import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';
import { ApiService } from '../idiomas/services/api-service';
import { Traducciones } from '../traducciones';

@Component({
  selector: 'app-traductor',
  templateUrl: './traductor.component.html',
  styleUrls: ['./traductor.component.scss']
})
export class TraductorComponent implements OnInit {
  
  traductor_form = this.fb.group({palabra:[""],traduccion:[""]});
  traducciones: Traducciones[] = [];
  constructor(private fb:FormBuilder, public apiService:ApiService) { }

  ngOnInit(): void {
    this.getTraduccion();
  }

  prueba(){
    this.getTraduccion();
    //this.traductor_form.patchValue({
    //  traduccion:this.traductor_form.get("palabra")?.value
    //}) 
  }
  prueba_dos(){
    
  }
  getTraduccion(){
    this.apiService.getTraduccion(this.traductor_form.get("palabra")?.value).subscribe(response=>{
      
      if(response){
        const { Traduccion } = response
        this.traductor_form.patchValue({
          traduccion: Traduccion.map((e:Traducciones)=>{return e.dialecto +" - " +  e.traduccion+ "\n"})
        });  
      }else{
        this.traductor_form.patchValue({
          traduccion: "Ingrese una palabra"
        });
      }
      //console.log(Traduccion);
    })
  }
}
