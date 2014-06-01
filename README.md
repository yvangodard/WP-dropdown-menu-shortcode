 v
============

Présentation
------------

Ce plugin Wordpress ajoute le support du shortcode *dropmenu*.
Gràce à ce shortcode, il est possible d'intégrer dans une page, un post, un widget, une Dropdown Box contenant les entrées d'un menu Worpress.
Pour cela, le plugin s'appuie sur la fonction *dropdown_menu()* développée pour le plugin [Dropdown Menus](https://wordpress.org/plugins/dropdown-menus/).


Bug report
-------------

Si vous voulez me faire remonter un bug : [ouvrir un bug](https://github.com/ygodard/dropdown-menu-shortcode/issues).


Utilisation
---------

Le shortcode supporte les paramètres suivants

	menu 		=> 	Nom du Menu
	class		=>	Classe
	onelevel	=> 	0/1 (si 1, l'arborescene du menu ne sera pas conservée)
	depthlimit	=>	Niveau de profondeur du menu à conserver (par défaut 0, c'est à dire aucune limite)
	addtitle	=>	Titre ajouté en haut du menu déroulant
	indent		=>	Caractères ajoutés pour les sous menus (par defaut '- ')


Exemple :

	[dropmenu menu="Nom du Menu" class="maclasse" onelevel=0 depthlimit=2 indent="> "]


License
-------

Ce plugin Wordpress [WP-dropdown-menu-shortcode](https://github.com/yvangodard/WP-dropdown-menu-shortcode) de [Yvan GODARD](http://www.yvangodard.me) est mis à disposition selon les termes de la licence Creative Commons 4.0 BY NC SA (Attribution - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions).

<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>


Limitations
-----------

THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS "AS IS" AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE REGENTS AND CONTRIBUTORS BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.