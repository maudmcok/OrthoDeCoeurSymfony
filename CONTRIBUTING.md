# Guide de Contribution - OrthoDeCoeur

## Comment Contribuer

Nous sommes ravis que vous souhaitiez contribuer au projet OrthoDeCoeur ! Voici quelques directives pour vous aider.

### Processus de Contribution

1. **Fork du Projet**
   - Créez un fork du projet sur votre compte GitHub
   - Clonez le fork sur votre machine locale

2. **Configuration du Projet**
   ```bash
   composer install
   cp .env .env.local
   # Configurez vos variables d'environnement
   3. Création d'une Branche
   
   - Créez une branche pour votre contribution
   - Utilisez un nom descriptif (ex: feature/gestion-rendez-vous )
   ```
4. **Standards de Code**
   
   - Respectez les standards PSR-12
   - Utilisez les conventions de nommage Symfony
   - Commentez votre code en français
   - Testez votre code avant de soumettre
5. **Tests**
   
   - Assurez-vous que tous les tests passent
   - Ajoutez des tests pour les nouvelles fonctionnalités

### Soumission des Modifications
1. **Commit**
   
   - Messages clairs et descriptifs en français
   - Un commit par fonctionnalité/correction
2. **Pull Request**
   
   - Créez une Pull Request vers la branche main
   - Décrivez clairement vos modifications
   - Référencez les issues concernées

### Rapport de Bugs
   - Utilisez le système d'issues de GitHub
   - Fournissez un maximum d'informations :
        - Version de PHP/Symfony
        - Étapes pour reproduire
        - Comportement attendu/obtenu
        - Captures d'écran si nécessaire