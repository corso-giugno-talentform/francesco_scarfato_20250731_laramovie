# Progetto Laravel - Catalogo Film

### Utente Admin
- Può caricare i film nel catalogo
- Può modificarli e cancellarli  
- Può visualizzare tutti i film

### Utente Registrato
- Può visualizzare la lista dei film
- Può accedere al dettaglio di ogni film

###  Utente Non-Registrato
- Può visualizzare solo l'homepage con i titoli

---

## Obiettivi del Progetto

### Setup Iniziale
1. **Inizializzazione progetto su GitHub**
2. **Creazione progetto Laravel con:**
   - Laravel Vite -> ok
   - Bootstrap  -> ok
   - Template grafico di base -> ok
   - Componenti Blade -> ok

### Autenticazione e Utenti
3. **Gestire Autenticazione con Laravel Fortify**
4. **Aggiungere campo `is_admin` alla tabella Users** ->ok

### Gestione Film
5. **Creare risorsa Films** con le seguenti rotte:
   - INDEX (visualizzazione lista)
   - CREATE (form creazione - solo admin)
   - STORE (salvataggio - solo admin)

### Controllo Accessi
6. **Controllo se utente è Admin:**
   - Se TRUE: visualizzare comandi di gestione admin
   - Se FALSE: solo visualizzazione

---

## Schema ER

```
┌─────────────────┐     
│     USERS       │     
├─────────────────┤     
│ id (PK)         │     
│ name            │     
│ email           │     
│ password        │     
│ is_admin        │    -> ok 
│ created_at      │     
│ updated_at      │     
└─────────────────┘     

┌──────────────────┐
│      FILMS       │    -> ok cambiata in movies
├──────────────────┤
│ id (PK)          │
│ title            │
│ description      │     
│ release_year     │
│ genre            |
| cover            │    
│ duration         │
│ created_at       │
│ updated_at       │
└──────────────────┘
```

---

## Specifiche Tecniche

### Database
- **Users**: tabella standard Laravel + campo `is_admin`
- **Films**: nuova tabella con campi per gestire catalogo

### Routes Richieste
```php
// Solo queste 3 rotte per Films
GET /films          -> index (tutti)
GET /films/create   -> create (solo admin)  
POST /films         -> store (solo admin)
```

### Email
- Configurare Mailtrap per ambiente di sviluppo -> ok

---

##  Deliverable

### Repository GitHub
- Progetto Laravel completo
- Commit organizzati per fase

