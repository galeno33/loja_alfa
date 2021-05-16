import { Component } from '@angular/core';
import { map } from 'rxjs/operators';
import { HttpClient } from '@angular/common/http';
import { ProviderService} from '../provider/provider.service';
import { NavController } from '@ionic/angular';


@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  produtos: any;

  constructor(
             public http: HttpClient,
             public Urlserve: ProviderService,
             public nav: NavController,
             
  ){
    this.listprodutos();
  }

  listprodutos(){
    // tslint:disable-next-line:quotemark
    this.http.get(this.Urlserve.getUrl()+"dados.php").pipe(map((res:any) => res))
    .subscribe(
        listdado =>{
          this.produtos = listdado;
        }
    );
  }

  carrinhoCompra(){
    //console.log("carrinho de compras");
      //this.nav.navigateForward('/carrinho');
  }

  comprar(){
    //console.log("compra enviada ao carrinho");
    
  }

}
