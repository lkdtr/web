@Entity                                                                            @Name("user")
@Scope(SESSION)
@Table(name="users")
public class User implements Serializable
{
   private static final long serialVersionUID = 1881413500711441951L;

   private String username;
   private String password;
   private String name;

   public User(String name, String password, String username)
   {
      this.name = name;
      this.password = password;
      this.username = username;
   }

   public User() {}

   @NotNull @Length(min=5, max=15)
   public String getPassword()
   {
      return password;
   }

   public void setPassword(String password)
   {
      this.password = password;
   }

   @NotNull @Column( name="usrName")
   public String getName()
   {
      return name;
   }

   public void setName(String name)
   {
      this.name = name;
   }

   @Id @NotNull @Length(min=5, max=15)
   public String getUsername()
   {
      return username;
   }

   public void setUsername(String username)
   {
      this.username = username;
   }

}