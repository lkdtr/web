@Stateless
@Name("register")
public class RegisterAction implements Register
{

   @In
   private User user;

   @PersistenceContext
   private EntityManager em;

   @Logger
   private Log log;

   public String register()
   {
      List existing = em.createQuery(
         "select username from User where username=#{user.username}")
         .getResultList();

      if (existing.size()==0)
      {
         em.persist(user);
         log.info("Registered new user #{user.username}");
         return "/registered.jsp";
      }
      else
      {
         FacesMessages.instance().add("User #{user.username} already exists");
         return null;
      }
   }

}