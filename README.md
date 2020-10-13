# FoodRecSys
Food Recommender System based on Holistic User Model

Il sistema di raccomandazione suggerisce ricette personalizzate in ottica Health-Aware rispetto le caratteristiche dell'utente.

Ogni ricetta ha uno score popolare iniziale che varia in base ad una serie di regole:

  Regola A: se l'utente è in sovrappeso (in base al BMI) → suggerire ricette con poche calorie, pochi grassi, più carboidrati e più fibre

  Regola B: se l'utente è in sottopeso (in base al BMI) → suggerire ricette con più calorie, più carboidrati e più proteine

  Regola C: se un utente è di cattivo umore → suggerisci una ricetta più dolce.

  Regola D: se un utente fa attività fisica → suggerire ricette con più calorie, più proteine e più carboidrati 

  Regola E: se l'utente è stressato → suggerisci ricette meno salate, meno ricette col caffè e ricette con cibi “antistress” (come latte, riso, fagioli, …)

  Regola F: se l'utente è depresso → suggerire ricette a basso contenuto di grassi saturi, ricette con più carboidrati e fibre, con magnesio e con caffè

  Regola G: se è ora di andare a letto → suggerisci meno ricette con il caffè 

  Regola H: se l'utente non ha dormito abbastanza → suggerisci più ricette con magnesio, meno ricette col caffè e meno ricette con cibi grassi

  Regola I: data l'esperienza in cucina dell'utente, ricalcolare lo score di una ricetta in base alla sua capacità

  Regola J: se l'utente ha l'obiettivo di prendere peso e non è sovrappeso→ suggerire ricette con più calorie, più carboidrati e più proteine

  Regola K: se l'utente ha l'obiettivo di perdere peso e non è sottopeso→ suggerire ricette con poche calorie, pochi grassi e più carboidrati

  Regola L: dato il range di costo per una ricetta specificato dall'utente, ricalcolare lo score di una ricetta

  Regola M: dato il tempo massimo per preparare una ricetta specificato dall'utente, ricalcolare lo score di una ricetta

  Regola N: se l’utente ha un’età < 20 anni → suggerire ricette con più carboidrati, più fibre e meno grassi saturi

  Regola O: se l’utente ha un’età >= 20 e < 30 anni → suggerire ricette con più proteine, più carboidrati e più fibre

  Regola P: se l’utente ha un’età >= 30 e < 40 anni → suggerire ricette con più proteine e meno grassi

  Regola Q: se l’utente ha un’età >= 40 e < 60 anni → suggerire ricette con più fibre e meno grassi

  Regola R: se l’utente ha un’età > 60 anni → suggerire ricette con più proteine e meno calorie 


FOOD RECOMMENDER
Nella cartella foodwebapp è presente lo script per avviare il foodrecommender (start_server.sh).
Il foodrecommender è scritto in Python e necessita di Pandas e Flask.

Il modulo è organizzato in una classe Mood, che rappresenta la risorsa che è caricata e appositamente avviata su una precisa porta del server (5009).
Essa è organizzata così:
  • funzioni corrispondenti alle regole che il sistema deve applicare; in ciascuna funzione-regola sono contenuti una serie di calcoli che si applicano per modificare gli score delle ricette in base alle informazioni ottenute dall’utente tramite il form
  • istruzioni di acquisizione delle informazioni dell’utente, parametrizzate nell’url utilizzato nella richiesta HTTP GET del sistema
  • istruzioni di filtraggio in base ai vincoli espressi dall’utente tramite il form (es. vegetariano, senza lattosio...)
  • istruzioni di applicazione delle regole secondo i dati acquisiti ed elaborati dal sistema; vengono richiamate le funzioni corrispondenti alle regole del food recommender system
  • istruzioni di configurazione del software Python come un web service (richiamando funzioni di Flask e Pandas)
Nel momento in cui il modulo viene avviato sulla relativa porta, viene caricata e avviata la risorsa denominata Mood sul server sulla rispettiva porta. L’indirizzo per richiamare il servizio è “http://90.147.102.243:5009/mood/”, aggiungendo i parametri appropriati.

WEBAPP
La webapp si trova nella cartella foodrecsys. I linguaggi utilizzati per il suo sviluppo sono stati PHP, HTML5 e CSS.

Essa è articolata in 5 pagine principali:
  1. index.html (Figura 6), pagina di presentazione del sistema e del suo funzionamento;
  2. form.html (Figura 7), pagina di inserimento delle informazioni dell’utente le quali saranno utilizzate dal sistema di raccomandazione;
  3. recipes.php (Figura 8), pagina PHP con HTML “immerso” la quale ha il compito di creare il profilo utente elaborando le informazioni ottenute, di richiedere i servizi del food recommender system e di visualizzare i risultati all’utente.
  Per una questione di organizzazione e migliore modularità del sistema si è previsto un modulo PHP esterno da includere e da cui richiamare le funzioni più complesse che eseguono i compiti appena descritti (/php/requestFunctions.php).
  4. bye.php (Figura 9), pagina PHP con HTML “immerso” la quale ha il compito di memorizzare i risultati dell’esperimento nel file dataset dei risultati (/results/results.csv) e di comunicare all’utente la conclusione dell’esperimento senza errori.
  5. style.min.css, file CSS che specifica le caratteristiche utilizzate nelle pagine HTML o PHP

# Installazione
Per installare e avviare il recommender system, assicurandoti che Python 3 sia installato. 
Per installare le due librerie necessare utilizza il seguente comando da terminale:
  > pip install flask flask-restful pandas
  
Per avviare il Recommender System/Web Service avvia dal terminale il file ./start_server.sh
Avvia il file ./stop_server.sh per terminare il Web Service.
