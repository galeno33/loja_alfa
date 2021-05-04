import { Component } from '@angular/core';
import { map } from 'rxjs/operators';
import { HttpClient } from '@angular/common/http';
import { ProviderService} from '../provider/provider.service';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  produtos: any;

  constructor(
             public http: HttpClient,
             public Urlserve: ProviderService
  ){
    this.listprodutos();
  }

  listprodutos(){
    // tslint:disable-next-line:quotemark
    this.http.get(this.Urlserve.getUrl()+"/php/dados.php").pipe(map((res:any) => res))
    .subscribe(
        listdado =>{
          this.produtos = listdado;
        }
    );
  }

}
