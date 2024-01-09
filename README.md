# PHP Hotel

Introduzione a PHP.

Creazione di un application che riceve un array di hotels e ne mostra le proprietà in una tabella, filtrando anche in base alla chiave parcheggio e voto.

## Svolgimento

### Creazione della tabella

Copio da Bootstrap una tabella e ripeto, tramite un `foreach` le proprietà desiderate

Per la table head faccio un `foreach` sul primo elemento dell' array visto che le categorie sono identiche per ogni elemento dell' array.

```php
    <thead>
        <tr>
            <?php
                foreach ($hotels[0] as $key => $hotel) {
                    echo '<th scope="col">' . $key . '</th>';
                }
            ?>
        </tr>
    </thead>
```

Per le righe faccio sempre un `foreach` che mostra i singoli valori degli hotel

```php
    <tbody>
       <?php foreach ($hotels as $hotel) {
             echo '<tr>';
             echo '<td>' . $hotel['name'] . '</td>';
             echo '<td>' . $hotel['description'] . '</td>';
             echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
             echo '<td>' . $hotel['vote'] . '</td>';
             echo '<td>' . $hotel['distance_to_center'] . ' km</td>';
             echo '</tr>';
        } ?>
    </tbody>
```

### Creazione dei filtri

Creo un form in cui inserisco delle checkbox per selezionare i valori desiderati (parcheggio e stelle).

Assegno il value a delle varibili con $\_GET che poi uso per creare delle condizioni all' interno del foreach, in modo da mostrare solo gli hotel che soddisfano i value selezionati.
