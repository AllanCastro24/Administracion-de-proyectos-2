import { TestBed } from '@angular/core/testing';
import { RouterTestingModule } from '@angular/router/testing';
import { AppComponent } from './app.component';

describe('AppComponent', () => {
  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [
        RouterTestingModule
      ],
      declarations: [
        AppComponent
      ],
    }).compileComponents();
  });

  it('Debería crear la app', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.componentInstance;
    expect(app).toBeTruthy();
  });

  it(`Debería crear el titulo 'Traductor - Diccionario'`, () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.componentInstance;
    expect(app.title).toEqual('Traductor-Diccionario');
  });

  //it('Debería renderizar el titulo', () => {
  //  const fixture = TestBed.createComponent(AppComponent);
  //  fixture.detectChanges();
  //  const compiled = fixture.nativeElement as HTMLElement;
  //  expect(compiled.querySelector('.content span')?.textContent).toContain('Traductor-Diccionario');
  //});
});
