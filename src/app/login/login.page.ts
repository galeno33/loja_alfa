import { Component, OnInit } from '@angular/core';
import { AlertController } from '@ionic/angular';


@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {

    Login: string;
    password: string;

  constructor(
              public alert: AlertController
  ) { }

  ngOnInit() {



  }


  async entrar(){
    if(this.Login == undefined || this.password == undefined){

       const alert = await this.alert.create({
          header: 'Atenção',
          message: 'Preencha todos os campos!!',
          buttons: ['OK']
        });
        await alert.present();



    }else{

    }
  }

}
