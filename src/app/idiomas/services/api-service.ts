import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { environment } from "src/environments/environment";

@Injectable({
    providedIn: 'root'
})

export class ApiService {

    baseUrl = environment.baseUlr;

    constructor(public http:HttpClient) { }

    getIdiomas(){
        return this.http.get<any>(this.baseUrl)
    }
    
    getDiccionario(){
        return this.http.get<any>(this.baseUrl)
    }
    
    getTraduccion(){
        return this.http.get<any>(this.baseUrl)
    }
}
